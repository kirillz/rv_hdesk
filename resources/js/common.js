
/* Chart on dashboard */

function init() {
  // Run your javascript code here
  const labels = [
    'Январь',
    'Февраль',
    'Март',
    'Апрель',
    'Май',
    'Июнь',
  ];

  const data = {
    labels: labels,
    datasets: [
      {
      label: 'Доходы',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 2, 20, 30, 45],
    },
      {
        label: 'Расходы',
        backgroundColor: 'rgb(128,102,255)',
        borderColor: 'rgb(128,102,255)',
        data: [0, 5, 7, 2, 11, 14, 25],
      },
      {
        label: 'Счета',
        backgroundColor: 'rgb(255,128,0)',
        borderColor: 'rgb(255,128,0)',
        data: [0, 2, 3, 8, 11, 14, 21],
      },
    ]
  };
  var ctx = document.getElementById('myChart'); // node
  var ctx = document.getElementById('myChart').getContext('2d'); // 2d context
  var ctx = $('#myChart'); // jQuery instance
  var ctx = 'myChart'; // element id

  var myChart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: {/* Options here */
      layout: {
        padding: 30,
        margin: 10,
      },

      },
  });
}

// Run the 'init' function when the DOM content is loaded
document.addEventListener("DOMContentLoaded", init, false);

/* END Chart on dashboard */
