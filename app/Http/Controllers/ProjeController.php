<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjeController extends Controller
{

      public function hakkimizda(){


        return view('pages.hakkimizda');
      }


      public function iletisim(){


        return view('pages.iletisim');

      }
      public function projeninamaci(){


        return view('pages.proje');

      }

      public function galeri(){


        return view('pages.galeri');

      }





}
