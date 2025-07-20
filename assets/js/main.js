"use strict";

var adobeDCView;

document.addEventListener("adobe_dc_view_sdk.ready", function() {
    adobeDCView = new AdobeDC.View({
        clientId: "e2a54f4951124f24bc4a1a7e1072cab4", 
        divId: "adobe_view"
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

function setupCopyright() {
    let cyear = gmdate('Y');
    $('#footer').html(`&copy; Copyright ${cyear}`);
}

function setupHandlers() {
    $('#mobile_button').on('click', function() {
        $('nav ul').toggleClass('show');
    });

    $('.nav_link').on('click', function() {
        $('nav ul').removeClass('show');
    });

    $('#resumeBtn').on('click', function() {
        $('#adobe_view').toggleClass('show');
    });
}

$(document).ready(function() {
    setupHandlers();
    setupCopyright();
});