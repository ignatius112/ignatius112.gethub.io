</div>
</div>
<script src="asset/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>

    <!-- Grafik -->
    <script>
      /* globals Chart:false */

      (() => {
        'use strict'

        // Graphs
        const ctx = document.getElementById('myChart')
        // eslint-disable-next-line no-unused-vars
        const myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: [
              'Sunday',
              'Monday',
              'Tuesday',
              'Wednesday',
              'Thursday',
              'Friday',
              'Saturday'
            ],
            datasets: [{
              data: [
                9500,
                12483,
                15339,
                17003,
                19489,
                21034,
                24092
              ],
              lineTension: 0,
              backgroundColor: 'transparent',
              borderColor: '#007bff',
              borderWidth: 4,
              pointBackgroundColor: '#007bff'
            }]
          },
          options: {
            plugins: {
              legend: {
                display: false
              },
              tooltip: {
                boxPadding: 3
              }
            }
          }
        })
      })()

      </script>

      <script>
        function timerLock() {
          let time, startTimer;
          let frame = document.querySelector('.frame-timer');
          let timer = document.getElementById('timer');
          
        function countdown() {
          frame.setAttribute('hidden', true);
          timer.innerText = <?= $sesi ?>;
          startTimer = setInterval(() => {
            if (timer.innerText > 0) {
              timer.innerText--;
              if (timer.innerText <= 5 ) {
                frame.removeAttribute('hidden');
                return timer.innerText;
              }
            }
            frame.setAttribute('hidden', true);
          }, 1000);
          startTimer();
          
        }

          function resetTimer() {
            clearTimeout(time);
            clearInterval(startTimer);
            time = setTimeout(() => {
              window.location.href = 'proses.php?param=lock';
            }, <?= $sesi * 1000 ?>);
            countdown();
          }


        window.addEventListener('load', resetTimer, true);
        window.addEventListener('mousemove', resetTimer, true);
        window.addEventListener('click', resetTimer, true);
        window.addEventListener('keydown', resetTimer, true);
        window.addEventListener('scroll', resetTimer, true);
        }
      

        if (<?= $sesi ?> > 0) {
          timerLock();
        }

    </script>

</body>
</html>