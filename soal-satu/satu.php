<?php

function pindahDisk($jumlah, $sumber, $tujuan, $via)
{
    if ($jumlah == 1) {
        echo "Pindahkan Disk 1 dari menara " . $sumber . " ke menara " . $tujuan . "\n";
        return;
    } else {
        pindahDisk($jumlah - 1, $sumber, $via, $tujuan);
        echo "Pindahkan Disk " . $jumlah . " dari menara " . $sumber . " ke menara " . $tujuan . "\n";
        pindahDisk($jumlah - 1, $via, $tujuan, $sumber);
    }
}

pindahDisk(3, 'A', 'C', 'B');
