$('myForm').on('submit', function (e) {
    var $this = $(this);

    //prevent the form from submitting normally
    e.preventDefault();

    //show the default loading message while the $.post request is sent
    $.mobile.showPageLoadingMsg();

    //send $.post request to server, `$this.serialize()` adds the form data to the request
    $.post($this.attr('action'), $this.serialize(), function (response) {

        //you can now access the response from the server via the `response` variable
        $.mobile.hidePageLoadingMsg();
    }, 'json');//you can set the response data-type as well
});