<?php

namespace App\Utilities;
use App\Models\Peminjaman;

class CreateNoPeminjaman
{
	public function createNoTik($id)
	{
        return 'TIK-'.date('Y').'-'.$id;
	}

    public function createNoMemo($id)
	{
        return 'MEMO-'.date('Y').'-'.$id;
	}

}
