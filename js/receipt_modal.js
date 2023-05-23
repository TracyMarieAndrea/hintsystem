document.getElementById('gr').addEventListener('click', 
            function(){
                    document.querySelector('.receipt_modal').style.display = 'flex';
            });

            document.querySelector('.cancel-btn').addEventListener('click',
            function(){
                    document.querySelector('.blurA').style.display = 'none';
            });

            window.onclick = function(e) {
                if(e.target.className === ".receipt_modal") {
                    e.target.style.display = "none";
                }
            };