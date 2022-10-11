<?php

if(isset($_POST['filter'])){
    $wilkerstat = $_POST['wilkerstat'];
    $tanggal = $_POST['tanggal'];

    $sql = "SELECT * FROM report WHERE wilkerstat='$wilkerstat' AND tanggal='$tanggal' ";
    $result = mysqli_query($conn,$sql);

    if(!$result) {
        die("Query Error : ".mysqli_errno($conn)." - ".mysqli_errno($conn));
    }

    $array=array();
    while ($data = mysqli_fetch_assoc($result)) {
        $array[]=$data;
    }

    echo json_encode($array);

    // echo ($data);
}
    ?>



            <script>
                $.getJSON( "index.php", function( data ) {

                    var isi_labels = [];
                    var isi_data1=[];
                    var isi_data2=[];

                    $(data).each(function(i){         
                        isi_labels.push(data[i].nama_petugas); 
                        isi_data1.push(data[i].before_verif);
                        isi_data2.push(data[i].after_verif);
                    });    

                    console.log(isi_labels);
                    console.log(isi_data1);
                    console.log(isi_data2);

                    var canvasElement = document.getElementById("cookieChart").getContext('2d');

                    var myChart = new Chart(canvasElement,{
                        type: "bar",
                        data: {
                            labels: isi_labels,
                            datasets:[
                                {
                                    label: "Sebelum Verifikasi KK",
                                    data: isi_data1,
                                    backgroundColor: ["#609773"]
                                },
                                {
                                    label: "Setelah Verifikasi KK",
                                    data: isi_data2,
                                    backgroundColor: ["yellow"]
                                },
                            ],
                        },
                    });
                });
            </script>