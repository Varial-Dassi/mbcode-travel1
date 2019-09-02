function words(data) {
    var fill = d3.scale.category20();

    //d3.json("http://localhost:3000/words", function(err, data) {
        var layout = d3.layout.cloud()
            .size([480, 480])
            .words(data.list)
            .padding(5)
            .rotate(0)
            .font("Impact")
            .fontSize(function(d) { return d.size; })
            .on("end", function (words) {
                d3.select("#cloud").append("svg")
                    .attr("width", layout.size()[0])
                    .attr("height", layout.size()[1])
                    .append("g")
                        .attr("transform", "translate(" + layout.size()[0] / 2 + "," + layout.size()[1] / 2 + ")")
                        .selectAll("a")
                        .data(words).enter()
                        .append("a")
                            .attr("xlink:href", function(d) {
                                return '/tags/' + d.text;
                            })
                            .append("text")
                                .style("font-size", function(d) { return d.size + "px"; })
                                .style("font-family", "Impact")
                                .style("fill", function(d, i) { return fill(i); })
                                .attr("text-anchor", "middle")
                                .attr("transform", function(d) {
                                    return "translate(" + [d.x, d.y] + ") rotate(" + d.rotate + ")";
                                })
                                .text(function(d) { return d.text; });
            });

        layout.start();
    //});
}
