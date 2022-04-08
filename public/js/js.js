
$(document).ready(function () {
    
    $('#couleurTexte').change(function () {
        $('#contenu').css('color', $(this).val());
    });
    
    $('#btn').click(function () {
        var fontSize = parseInt($("#contenu").css("font-size"));
        if (fontSize <= 28) {
            $("#contenu").css('font-size', '+=1');
        } else {
            alert('Taille maximum atteinte')
        }
    })
    $('#btn1').click(function () {
        var fontSize = parseInt($("#contenu").css("font-size"));
        if (fontSize >= 11) {
            $("#contenu").css('font-size', '-=1');
        } else {
            alert("taille minimum atteinte")
        }
    })
    $('#tailleLogo').click(function () {
        var fontSize = parseInt($("#logo1").css("width"));
        if (fontSize <= 500) {
            $("#logo1").css('width', '+=25');
            $("#logo1").css('height', '+=25');
        } else {
            alert('Taille maximum atteinte')
        }
    })
    $('#tailleLogo1').click(function () {
        var fontSize = parseInt($("#logo1").css("width"));
        if (fontSize >= 50) {
            $("#logo1").css('width', '-=25');
            $("#logo1").css('height', '-=25');
        } else {
            alert('Taille maximum atteinte')
        }
    })


    $('#positionDroite').click(function () {
        var left = parseInt($("#contenu").css("left"));
        if (left < 567) {
            $("#contenu").css('left', '+=25');
        } else {
            alert('Taille maximum atteinte')
        }
    })
    $('#positionGauche').click(function () {
        var right = parseInt($("#contenu").css("left"));
        if (right > 17) {
            $("#contenu").css('left', '-=25');
        } else {
            alert('Taille maximum atteinte')
        }
    })
    $('#positionHaut').click(function () {
        var top = parseInt($("#contenu").css("top"));
        if (top < 567) {
            $("#contenu").css('top', '-=25');
        } else {
            alert('Taille maximum atteinte')
        }
    })
    $('#positionBas').click(function () {
        var top = parseInt($("#contenu").css("top"));
        if (top > 17) {
            $("#contenu").css('top', '+=25');
        } else {
            alert('Taille maximum atteinte')
        }
    })
    $("#select-font").change(function () {
        var text = $('#select-font option:selected').text();
        $("#contenu").css({
            "font-family": text
        });
    })

    $('#cmd').click(function () {
        html2canvas($("#global")[0]).then(function (canvas) {
            canvas.toBlob(function (blob) {
                window.saveAs(blob, "carte-visite.png");
            });
        });
    });
    $("#cadre").click(function () {
        $("#contenu").css({
            "background-color": "rgb(0,0,0,0.5)",
            "padding": "10PX",
            "border-radius": "10PX"
        })
    })
})

function changePlace(place) {
    var elem = document.getElementById('contenu');
    elem.style.textAlign = place;
}

function placeLogo(place) {
    var elem = document.getElementById('logo');
    elem.style.textAlign = place;
}