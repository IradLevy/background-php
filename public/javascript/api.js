function fetchData(url, successCallback, errorCallback) {
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            if (successCallback && typeof successCallback === 'function') {
                successCallback(data);
            }
        },
        error: function(xhr, status, error) {
            if (errorCallback && typeof errorCallback === 'function') {
                errorCallback(xhr, status, error);
            }
        }
    });
}