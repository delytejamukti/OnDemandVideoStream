<?php

if(isset($_POST['id']) && isset($_POST['format']) && isset($_POST['frame_size'])) {
    $id = $_POST['id'];
    $format_ = $_POST['format'];
    $frame_size = $_POST['frame_size'];
    $framerate = $_POST['framerate'];
    $unik = mt_rand(1000000, 9999999);
    $nama_file = explode('.',$id);


    // $command="ffmpeg\bin\\ffmpeg -i \uploaded\\".$id." ".$frame_size.$framerate." \\converted\\".$nama_file[0]."_converted".".".$format_;
    // ffmpeg\bin\ffmpeg -i \upload\teknologi.mp4 -s 230x236
    
    $command = "ffmpeg\bin\\ffmpeg -i uploaded\\".$id." -vf scale=".$frame_size.$framerate." converted\\".$nama_file[0]."_".$unik."_converted.".$format_;
    $output_file="converted/".$nama_file[0]."_".$unik."_converted.".$format_;
    exec($command);
    if(file_exists($output_file)){
        $data['flag'] = "sukses";
        $data['link'] = $output_file;

        header('Content-Type: application/json');
        echo json_encode($data);
    }else{
        $data['flag'] = "gagal";
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    
}










?>