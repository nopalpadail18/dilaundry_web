<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class DashboardController extends Controller
{
    private $baseUrl = 'http://195.35.45.196:3100/api';

    public function index(Request $request)
    {
        $token = session('access_token');
        $user = session('user');

        // Cari berdasarkan ID
        if ($request->filled('idoutlay')) {
            return $this->show($request->idoutlay);
        }

        // Range tanggal default 7 hari terakhir
        $startDate = $request->input('startDate', Carbon::now()->subDays(7)->toDateString());
        $endDate   = $request->input('endDate', Carbon::now()->toDateString());

        $startDateIso = Carbon::parse($startDate)->startOfDay()->toISOString();
        $endDateIso   = Carbon::parse($endDate)->endOfDay()->toISOString();

        $url = "{$this->baseUrl}/expenditure?startDate={$startDateIso}&endDate={$endDateIso}";
        $response = Http::withToken($token)->get($url);

        if ($response->successful()) {
            $json = $response->json();
            $allData = $json['data'] ?? $json ?? [];
        } else {
            $allData = [];
        }

        return view('dashboard', [
            'user' => $user,
            'allData' => $allData,
            'detailData' => null
        ]);
    }

    public function show($id)
    {
        $token = session('access_token');
        $user = session('user');

        $detailUrl = "{$this->baseUrl}/expenditure/{$id}";
        $detailResponse = Http::withToken($token)->get($detailUrl);

        if ($detailResponse->successful()) {
            $json = $detailResponse->json();
            $detailData = $json['data'] ?? $json ?? null;
        } else {
            $detailData = null;
        }

        // Ambil semua data default 7 hari terakhir
        $startDateIso = Carbon::now()->subDays(7)->startOfDay()->toISOString();
        $endDateIso   = Carbon::now()->endOfDay()->toISOString();
        $listResponse = Http::withToken($token)->get("{$this->baseUrl}/expenditure?startDate={$startDateIso}&endDate={$endDateIso}");

        if ($listResponse->successful()) {
            $jsonList = $listResponse->json();
            $allData = $jsonList['data'] ?? $jsonList ?? [];
        } else {
            $allData = [];
        }

        return view('dashboard', [
            'user' => $user,
            'allData' => $allData,
            'detailData' => $detailData
        ]);
    }

    public function storeExpenditure(Request $request)
    {
        $validated = $request->validate([
            'jenisId' => 'required|in:1,2',
            'description' => 'required|string',
            'amount' => 'required|numeric|min:1'
        ]);

        $token = session('access_token');
        if (!$token) {
            return redirect('/login')->withErrors(['msg' => 'Token tidak ditemukan, silakan login ulang.']);
        }

        $response = Http::withToken($token)
            ->asJson()
            ->post($this->baseUrl . '/expenditure', [
                'jenisId'     => (int) $validated['jenisId'],
                'description' => $validated['description'],
                'amount'      => (int) $validated['amount']
            ]);

        if ($response->successful()) {
            return redirect()->route('dashboard')->with('success', 'Data berhasil ditambahkan');
        } else {
            return back()->withErrors([
                'msg' => $response->json()['message'] ?? $response->body() ?? 'Gagal menambahkan data'
            ]);
        }
    }

    public function updateExpenditure(Request $request, $id)
    {
        $validated = $request->validate([
            'jenisId' => 'required|in:1,2',
            'description' => 'nullable|string',
            'amount' => 'required|numeric|min:1',
            'datetime' => 'nullable|date'
        ]);

        $token = session('access_token');
        if (!$token) {
            return redirect('/login')->withErrors(['msg' => 'Token tidak ditemukan, silakan login ulang.']);
        }

        $response = Http::withToken($token)
            ->asJson()
            ->put($this->baseUrl . "/expenditure/{$id}", [
                'jenisId'     => (int) $validated['jenisId'],
                'description' => $validated['description'],
                'amount'      => (int) $validated['amount'],
                'datetime'    => $validated['datetime'] ?? Carbon::now()->toISOString()
            ]);

        if ($response->successful()) {
            return redirect()->route('dashboard')->with('success', 'Data berhasil diperbarui');
        } else {
            return back()->withErrors([
                'msg' => $response->json()['message'] ?? $response->body() ?? 'Gagal update data'
            ]);
        }
    }
}
