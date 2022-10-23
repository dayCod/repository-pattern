<?php

namespace App\Repository\Biodates;

use App\Models\Biodate;
use App\Repository\Repository;

class BiodatesRepository implements Repository
{
    public function storeBiodates($data)
    {
        return Biodate::create($data);
    }

    public function showBiodates($biodate)
    {
        return Biodate::findOrFail($biodate);
    }

    public function updateBiodates($data, $id)
    {
        return Biodate::findOrFail($id)->update($data);
    }

    public function destroyBiodates($id)
    {
        return Biodate::findOrFail($id)->delete();
    }
}
