<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;


class AuthApiController extends Controller
{
    private $baseUrl = 'http://195.35.45.196:3100/api';

    // ===== LOGIN =====
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        try {
            $response = Http::withHeaders(['Accept' => 'application/json'])
                ->post($this->baseUrl . '/auth/login', [
                    'username' => $request->username,
                    'password' => $request->password
                ]);

            Log::info('Login API response: ' . $response->body());

            if ($response->successful()) {
                $data = $response->json();
                Session::put('access_token', $data['accessToken'] ?? null);
                Session::put('refresh_token', $data['refreshToken'] ?? null);
                Session::put('user', $data['data'] ?? null);

                return redirect('/dashboard');
            } else {
                return back()->withErrors([
                    'login_error' => $response->json()['message'] ?? 'Login gagal',
                    'api_response' => $response->body()
                ])->withInput();
            }
        } catch (\Exception $e) {
            Log::error('Login API error: ' . $e->getMessage());
            return back()->withErrors([
                'login_error' => 'Terjadi kesalahan saat login.',
                'api_response' => $e->getMessage()
            ])->withInput();
        }
    }

    public function logout()
    {
        Session::forget(['access_token', 'refresh_token', 'user']);
        return redirect('/login');
    }

    // ===== REGISTER =====
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:6|confirmed'
        ]);

        // Tambahkan random suffix supaya unik
        $uniqueSuffix = Str::random(4);
        $usernameUnique = $request->username;
        $emailParts = explode('@', $request->email);
        $emailUnique = $emailParts[0] . $uniqueSuffix . '@' . $emailParts[1];

        try {
            $response = Http::withHeaders(['Accept' => 'application/json'])
                ->post($this->baseUrl . '/auth/register', [
                    'name' => $request->name,
                    'username' => $usernameUnique,
                    'email' => $emailUnique,
                    'password' => $request->password
                ]);

            Log::info('Register API Response: ' . $response->body());

            if ($response->successful()) {
                $data = $response->json();
                Session::put('access_token', $data['accessToken'] ?? null);
                Session::put('user', $data['data'] ?? null);

                return redirect('/login')->with('success', 'Register berhasil! Username/email otomatis dibuat unik.');
            } else {
                return back()->withErrors([
                    'register_error' => $response->json()['message'] ?? 'Register gagal',
                    'api_response' => $response->body()
                ])->withInput();
            }
        } catch (\Exception $e) {
            Log::error('Register API error: ' . $e->getMessage());
            return back()->withErrors([
                'register_error' => 'Terjadi kesalahan saat register.',
                'api_response' => $e->getMessage()
            ])->withInput();
        }
    }

}
