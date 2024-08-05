<div class="row2">
    <div class="row2 font_title">
      <h1>Biểu đồ Thống kê</h1>
    </div>
    <div class="row2 form_content ">
      <div
              id="myChart" style="width:100%; width:800px; height:500px; align-items: center">
      </div>

      <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
// Set Data
          const data = google.visualization.arrayToDataTable([
            ['danh muc', 'so luong'],
            <?php 
                foreach ($bieudothongke as $thongke) 
                {
                    extract($bieuthongke);
                    echo "['$name',$soluong]";
                }
            ?>
          ]);

// Set Options
          const options = {
            title:'Bieu do thong ke hang hoa san pham',
            is3D:true
          };

// Draw
          const chart = new google.visualization.BartChart(document.getElementById('myChart'));
          chart.draw(data, options);

        }
      </script>

    </div>
  </div>