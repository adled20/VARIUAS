
<script>
    var dom = document.getElementById('Grafica');
var myChart = echarts.init(dom, null, {
  renderer: 'canvas',
  useDirtyRect: false
});
var app = {};

var option;

option = {
    title: {
        text: "Leche producida por mes",
        left: "center"
    },
  xAxis: {
    type: 'category',
    data: Mes
  },
  yAxis: {
    type: 'value'
  },
  series: [
    {
      data: Litros,
      type: 'bar',
      showBackground: true,
      backgroundStyle: {
        color: 'rgba(180, 180, 180, 0.2)'
      }
    }
  ]
};

if (option && typeof option === 'object') {
  myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);
</script>