$("#process_image").ezPlus();

    document.querySelectorAll(".click").forEach(el => {
        
        el.addEventListener("click", e => {
            const id = e.target.getAttribute("id");

            $("#process_image").attr("src", "assets/img/"+id+".png");
            $("#process_image").attr("data-zoom-image", "assets/img/"+id+".png");

        });
    });