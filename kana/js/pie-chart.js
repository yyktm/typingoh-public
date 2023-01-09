poll_chart();
function poll_chart() {
    const $chart = document.querySelector('#chart');
    if (!$chart) {
        return;
    }


    const ctx = $chart.getContext('2d');
    const K_true = $chart.dataset.true;
    const K_false = $chart.dataset.false;
    const K_un = $chart.dataset.un;

    let data;

    if (K_true == 0 && K_false == 0 && K_un == 0) {
        data = {
            labels: ['解答がありませんでした。'],
            datasets: [{
                data: [1],
                backgroundColor: [
                    '#9ca3af'
                ]
            }]
        }
    } else {
        data = {
            labels: ['正解', '不正解', 'パス'],
            datasets: [{
                data: [K_true, K_false, K_un],
                backgroundColor: [
                    '#34d399',
                    '#f87171',
                    '#9ca3af'
                ]
            }]
        }
    }

    new Chart(ctx, {
        type: 'pie',
        data: data,
        options: {
            legend: {
                position: 'bottom',
                labels: {
                    fontSize: 18
                }
            }
        }
    });
}