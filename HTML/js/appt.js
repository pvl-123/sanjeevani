function getTimeStops(start, end) {
    var startTime = moment(start, 'HH:mm');
    var endTime = moment(end, 'HH:mm');

    if (endTime.isBefore(startTime)) {
        endTime.add(1, 'day');
    }

    var timeStops = [];

    while (startTime <= endTime) {
        timeStops.push(new moment(startTime).format('HH:mm'));
        startTime.add(15, 'minutes');
    }
    return timeStops;
}

var timeStops = getTimeStops('11:00', '02:00');
console.log('timeStops ', timeStops);
timeStops = getTimeStops('11:00', '23:59');
console.log('timeStops ', timeStops);