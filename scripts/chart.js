const lineLabels = [
  'Jan',
  'Feb',
  'Mar',
  'Apr',
  'May',
  'June',
  'July',
  'Aug',
  'Sept',
  'Oct',
  'Nov',
  'Dec',
];
const lineData = {
  labels: lineLabels,
  datasets: [
    {
      label: 'Plastic Pet',
      data: [5, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23],
      fill: false,
      backgroundColor: 'rgb(0, 255, 0)',
      borderColor: 'rgb(0, 255, 0)',
      tension: 0.1,
    },
    {
      label: 'Carton',
      data: [2, 4, 6, 8, 10, 12, 14, 15, 16, 18, 20, 22],
      fill: false,
      backgroundColor: 'rgb(255, 0, 0)',
      borderColor: 'rgb(255, 0, 0)',
      tension: 0.1,
    },
    // {
    //   label: 'Cans',
    //   data: [5, 6, 10, 7, 9, 11, 20, 15, 17, 25, 21, 30],
    //   fill: false,
    //   borderColor: 'rgb(75, 255, 192)',
    //   tension: 0.1,
    // },
    // {
    //   label: 'Carton',
    //   data: [13, 33, 20, 28, 32, 11, 13, 13, 11, 30, 34, 23],
    //   fill: false,
    //   borderColor: 'rgb(75, 192, 255)',
    //   tension: 0.1,
    // },
  ],
};
const lineConfig = {
  type: 'line',
  data: lineData,
  options: {
    scales: {
      y: {
        title: {
          display: true,
          text: 'Kilo',
        },
      },
      x: {
        title: {
          display: true,
          text: 'Month',
        },
      },
    },
  },
};
let lineChart = new Chart(document.getElementById('lineChart'), lineConfig);

//Pie chart belw

const pieLabel = {
  labels: ['Plastic Pet', 'Plastic Solid', 'Cans', 'Cartons', 'Others'],
  datasets: [
    {
      label: 'Latest Collection',
      data: [25, 35, 20, 10, 10],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(153, 102, 255, 0.2)',
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(153, 102, 255, 1)',
      ],
      borderWidth: 1,
    },
  ],
};

const pieConfig = {
  type: 'pie',
  data: pieLabel,
  options: {
    plugins: {
      datalabels: {
        color: 'black',
        font: {
          size: 16,
        },
        formatter: (value, ctx) => {
          let datasets = ctx.chart.data.datasets;
          if (datasets.indexOf(ctx.dataset) === datasets.length - 1) {
            let sum = datasets[0].data.reduce((a, b) => a + b, 0);
            let percentage = Math.round((value / sum) * 100) + '%';
            return percentage;
          } else {
            return percentage;
          }
        },
      },
    },
  },
};

let pieChart = new Chart(document.getElementById('pieChart'), {
  ...pieConfig,
  plugins: [ChartDataLabels],
});
