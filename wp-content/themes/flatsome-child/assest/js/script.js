jQuery(document).ready(function () {
    jQuery(".price-procent")
    .slider({
        max: 12
    })
    .slider("pips", {
        rest: "label"
    });
});