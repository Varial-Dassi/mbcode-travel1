function stars(options) {
    var stars = [],
        placeholders = options.container.querySelectorAll('span'),
        chars = {
            empty: String.fromCharCode(9734),
            full: String.fromCharCode(9733)
        },
		ec = new evercookie({
			asseturi: "/swf"
		});
		curr = (typeof options.curr === "undefined" || options.curr === null) ? 0 : options.curr,
		clicksNumber = options.clicksNumber || 0,
		articleId = options.articleId,
		once = false,
                nbTxt = document.querySelector(".cntVotes"),
		cb = options.cb;

    function addStar(i) {
        var star = placeholders[i] ? placeholders[i] : document.createElement('span');
        star.innerText = star.textContent = i < curr ? chars.full : chars.empty;
        options.container.appendChild(star);

        var id = stars.push(star);
        star.addEventListener('mouseenter', function() {
            if(once === false) {
                for(var j = 0; j < id; j++) {
                    stars[j].innerText = stars[j].textContent = chars.full;
                }
				for(var j = options.max - 1; j >= id; j--) {
					stars[j].innerText = stars[j].textContent = chars.empty;
				}
            }
        });
        star.addEventListener('mouseleave', function() {
             if(once === false) {
                for(var j = 0; j < id; j++) {
                    stars[j].innerText = stars[j].textContent = chars.empty;
                }
				for(var j = 0; j < curr; j++) {
					stars[j].innerText = stars[j].textContent = chars.full;
				}
            }
        });
        star.addEventListener('click', function() {
			setTimeout(setC, 300, id);
		});
	}

	function setC(id) {
        nbTxt.textContent = nbTxt.innerText = parseInt(clicksNumber) + 1;
		curr = id;
		once = true;
		ec.get("marked", function(value) {
			if(typeof(value) !== "undefined") {
				articles = value.split(",");
				for(var i = 0; i < articles.length; i++) {
					if(articles[i] == articleId) {
						// TODO nice display
						nbTxt.textContent = nbTxt.innerText = parseInt(clicksNumber);
						return;
					}
				}
			} else {
				value = "";
			}
	        value += articleId + ",";
			ec.set("marked", value);
			cb(id);
		});
	}

    for(var i = 0; i < options.max; i++) {
        addStar(i);
    }

    nbTxt.textContent = nbTxt.innerText = clicksNumber;
    options.container.classList.remove('locked');

    this.printStars = function(max){
        for(var i = 0; i < max; i++) {
            stars[i].innerText = stars[i].textContent = chars.full;
        }
    }
}
