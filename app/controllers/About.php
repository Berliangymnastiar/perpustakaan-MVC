<?php

class About
{
    public function index($nama = 'Berlian', $pekerjaan = 'Programmer')
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}
