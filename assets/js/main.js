"use strict";

var adobeDCView;

document.ready(function() {
    $('#mobile-button').on('click', function() {
        $('nav ul').toggleClass('show');
    });

    $('.nav-link').on('click', function() {
        $('nav ul').removeClass('sho')
    });

    $('#resume-btn').on('click', function() {
        $('#adobe-dc-view').toggleClass('show');
    });
});

document.addEventListener("adobe_dc_view_sdk.ready", function() {
    adobeDCView = new AdobeDC.View({
        clientId: "e2a54f4951124f24bc4a1a7e1072cab4", 
        divId: "adobe-dc-view"
    });
    adobeDCView.previewFile({
        content: {
            location: {
                url: "/assets/media/pdfs/Alexander-Tipaldo-resume.pdf"
            }
        },
        metaData: {
            fileName: "Alexander-Tipaldo-resume.pdf"
        }
    }, {
        embedMode: "SIZED_CONTAINER"
    });
});