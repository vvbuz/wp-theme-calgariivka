<?php get_header(); ?>
<div class="time">
    <div class="row">
        <div class="col-12 col-md-6" id="calgary-time"></div>
        <div class="col-12 col-md-6" id="kyiv-time"></div>
    </div>
</div>

<script>
    function updateCalgaryTime() {
        const calgaryTimeElement = document.getElementById('calgary-time');
        const options = {
            timeZone: 'America/Edmonton',
            hour12: false,
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric'
        };

        const calgaryTime = new Date().toLocaleString('en-US', options);
        calgaryTimeElement.textContent = `Current Calgary Time: ${calgaryTime}`;
    }

    function updateKyivTime() {
        const kyivTimeElement = document.getElementById('kyiv-time');
        const options = {
            timeZone: 'Europe/Kiev',
            hour12: false,
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric'
        };

        const kyivTime = new Date().toLocaleString('en-US', options);
        kyivTimeElement.textContent = `Current Kyiv Time: ${kyivTime}`;
    }

    // Update the time initially and every second
    updateCalgaryTime();
    updateKyivTime();
    setInterval(updateCalgaryTime, 1000);
    setInterval(updateKyivTime, 1000);
</script>
<?php get_footer(); ?>