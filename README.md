Simple way to add an overlay layer to any DOM element on frontend area.

How to use?

1 - You must add ohOverlay as dependency on your js script

2 - Start loader on your element, i.e:
    
    $('#my-element').LoadingOverlay('show', {
        imageColor: "",
        imageAnimation: "500ms rotate_right",
        minSize: 40,
        maxSize: 100,
        background: "#fff"
    });

3 - Stop loader after your logic

    $('#my-element').LoadingOverlay('hide');
