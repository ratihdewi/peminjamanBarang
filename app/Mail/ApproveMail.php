<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\MasterMail;
use App\Models\Peminjaman;

class ApproveMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $statusPeminjaman;
    protected Peminjaman $p;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($statusPeminjaman, $p)
    {
        //
        $this->statusPeminjaman = $statusPeminjaman;
        $this->p = $p;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $pengirim_email = "psdi@universitaspertamina.ac.id";
        $alter = "Teknologi Informasi Komunikasi Universitas Pertamina";
        $dataMail = MasterMail::find(1);

        return $this->from($pengirim_email, $alter)
            ->view('module.master.mail.send_mail_peminjaman')
            ->subject('Pengajuan Peminjaman Barang ')
            ->with([
                'pengirim' => 'Teknologi Informasi Komunikasi Universitas Pertamina',
                'penerima' => $this->p->email,
                'status' => $this->statusPeminjaman,
                'isi_pesan' => $dataMail,
                'vendor' => $this->p
            ]);
        
        return $this->view('view.name');
    }
}
