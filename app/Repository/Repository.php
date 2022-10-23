<?php

namespace App\Repository;


interface Repository
{
    // Biodates Resource
    public function storeBiodates($data);
    public function showBiodates($biodate);
    public function updateBiodates($data, $biodate);
    public function destroyBiodates($id);
}
