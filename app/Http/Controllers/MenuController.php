<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;

class MenuController extends Controller
{

    public function index()
    {
        $vociMenu = Menu::all();
        return view('menu.index', ['vociMenu' => $vociMenu]);
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(MenuRequest $request)
    {
       $menu = Menu::create([
        'nome' => $request->nome,
        'categoria' => $request->categoria,
        'ingredienti' => $request->ingredienti,
        'prezzo' => $request->prezzo,
        'img' => $request->file('img')->store('images','public'),
       ]);
       
       return redirect()->route('homepage')->with('successMessage','Hai correttamente inserito la ricetta!');

    }


    public function show(Menu $menu)
    {
        return view('menu.show', compact('menu'));
    }

    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

        public function update(MenuRequest $request, Menu $menu)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('images', 'public');
        }

        $menu->update($data);

        return redirect()->route('menu.index')->with('success', 'Piatto aggiornato!');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menu.index')->with('success', 'Piatto eliminato!');
    }
}
