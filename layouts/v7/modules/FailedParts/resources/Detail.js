
Inventory_Detail_Js("FailedParts_Detail_Js", {}, {

    postMailSentEvent: function () {
        window.location.reload();
    },

    Defaulstatusdependency: function () {
        let val = $('#fail_pa_pa_status').text();
        val = val.trim();
        if (val == "Closed") {
            $('#pending_days').text(0);
        }
    },

    registerEvents: function () {
        var self = this;
        this._super();
        this.Defaulstatusdependency();
        // this.handleCollapse();
    },
    handleCollapse: function () {
        let coll = document.getElementsByClassName("collapsible");
        let i;
        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                if (this.innerText == 'Show Details') {
                    this.innerText = 'Hide Details';
                } else {
                    this.innerText = 'Show Details';
                }
                this.classList.toggle("activeIgmenu");
                let content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    }

});