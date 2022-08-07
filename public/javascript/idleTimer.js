const time_until_logout_milliseconds = 43200000;
let idle_interval = startTimeoutForIdle();

function startTimeoutForIdle() {
    return setInterval(() => {
        addIdleTime(1000);
    }, 1000);
}

function addIdleTime(time) {
    let extra_idle_time = parseInt(localStorage.getItem("expiredTime"));
    if (extra_idle_time <= 0) {
        window.location.href = '../home.php';
    }
    extra_idle_time -= time;
    localStorage.setItem("expiredTime", extra_idle_time);
}

function resetIdleTimer() {
    clearInterval(idle_interval);
    idle_interval = startTimeoutForIdle();
    localStorage.setItem("expiredTime", time_until_logout_milliseconds);
}