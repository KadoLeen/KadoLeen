<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('welcome');
    }

    public function getAbout()
    {
        $fname = 'Amouta';
        $lname = 'The Second';
        $full = $fname.' '.$lname;
        $email = 'amouta@hamudi.com';
        $data['email'] = $email;
        $data['fullname'] = $full;

        return view('Static.about')->withData($data);
    }

    public function getContact()
    {
        return view('Static.contact');
    }
}
