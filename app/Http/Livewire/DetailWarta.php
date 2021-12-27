<?php

namespace App\Http\Livewire;

use App\Models\Warta;
use App\Models\WartaPopuler;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DetailWarta extends Component
{
    public $cek, $warta, $warta_populer;

    public function mount(Request $request, $id)
    {
        $ip = $request->ip();
        $tanggal = Carbon::now()->format('Y-m-d');
        $this->cek = WartaPopuler::where('warta_id', '=', $id)->where('alamat_ip', 'like', $ip)->whereDate('created_at', '=', $tanggal)->get();
        if ($this->cek->count() == 0) {
            WartaPopuler::create([
                'warta_id' => $id,
                'alamat_ip' => $ip,
            ]);
        }
        $this->warta = Warta::find($id);

        $warta2 = WartaPopuler::groupBy('warta_id')->select('warta_id', DB::raw('count(warta_id) as jumlah'))->orderBy('jumlah', 'desc')->limit(5)->get();
        if ($warta2->count() != 0) {
            $arrayWP = $warta2->pluck('warta_id');
            $this->warta_populer = Warta::latest()->whereIn('id', $arrayWP)->get();
        }
    }

    public function render()
    {
        return view('livewire.detail-warta')->layout('layouts.guest');
    }
}
