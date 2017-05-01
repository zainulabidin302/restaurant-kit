<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingsController extends Controller
{
    //
    private $keys = ['timezone', 'tables', 'status'];

    public function __construct() {
        $this->keys = ['timezone', 'tables', 'status'];
    }

    public function index() {
        $res = Setting::whereIn('key' , $this->keys)->get();
        $data = [];
        foreach($res as $row) {
            $data[$row['key']] = $row['value'];    
        }

        return view('settings.index', ['data'=> $data]);
    }

    public function save(Request $req) {

        foreach($this->keys as $key) {
            $setting = Setting::updateOrCreate(
                ['key' => $key],
                ['key' => $key, 'value' => $req[$key] ?? '']
            );
        }

        return redirect('settings');
    }


}
