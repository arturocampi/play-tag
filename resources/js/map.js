$("#village-image").on("click", function (event) {
    var clickX = event.pageX - $(this).offset().left - 15;
    var clickY = event.pageY - $(this).offset().top - 40;

    var existingRedDots = $(this).parent().find(".red-dot");
    var isNearExistingDot = false;

    existingRedDots.each(function () {
        var redDotX = parseInt($(this).css("left"));
        var redDotY = parseInt($(this).css("top"));
        var threshold = 10;

        if (
            Math.abs(clickX - redDotX) <= threshold &&
            Math.abs(clickY - redDotY) <= threshold
        ) {
            $(this).remove();
            isNearExistingDot = true;
            return false;
        }
    });

    if (!isNearExistingDot) {
        var redDot = $("<i>").addClass("bi bi-geo-alt-fill red-dot");
        redDot.css({ top: clickY, left: clickX });
        $(this).parent().append(redDot);
    }
});

$(".delete-all-icons").on("click", function () {
    $(".red-dot").remove();
});

$(".map-completed").on("click", function () {
    var userLocations = [];
    var redDots = $(".red-dot");
    userLocations = [];

    redDots.each(function (index) {
        var position = {
            position: index + 1,
            x: parseInt($(this).css("left")),
            y: parseInt($(this).css("top")),
        };
        userLocations.push(position);
    });
});
