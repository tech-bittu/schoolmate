<?php include('./navbar.php') ?>
<style>
    /* this css is for table  */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-align: center;
    }

    .table-con body {
        margin: 0;
        padding: 10px;
    }

    .table-con .container {
        display: flex;
        justify-content: center;
    }

    .table-con .p-container {
        display: flex;
        justify-content: center;
        /* background-color: gray; */
    }

    .table-con form {
        width: 350px;
        background-color: indigo;
        font-size: 2.5rem;
        font-weight: 900;
        color: white;
        padding: 11px 2px;
        overflow: hidden;
        text-shadow: 3px 3px 4px red;
    }

    .table-con span {
        display: block;
        width: 350px;
        font-size: 1.9rem;
        color: white;
        background-color: grey;
        border: 15px solid indigo;
        margin: 0;
        padding: 0;
    }

    .table-con input {
        text-align: left;
        font-size: 1.5rem;
        font-weight: 600;
        width: 75%;
        border: none;
        border-radius: 9px;
        outline: none;
        padding-left: 10px;
        margin-right: 5px;
        margin-left: 5px;
    }

    .table-con button {
        font-size: 20px;
        border: none;
        padding: 5px 10px;
        border-radius: 9px;
        background-color: green;
        color: white;
        cursor: pointer;
    }

    /* start css for randomselector  */
    .randomSelector * {
        box-sizing: border-box;
    }

    .randomSelector  {
        background-color: rgb(206, 255, 196);
        font-family: sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        overflow: hidden;
        margin: 0;
    }

    .randomSelector h3 {
        color: rgb(16, 27, 247);
        text-transform: uppercase;
        margin: 10px 0px;
    }

    /* .container {
        width: 515px;
        padding: auto;
    } */

    .randomSelector #textarea {
        width: 100%;
        height: 75px;
        border: none;
        padding: 10px;

    }

    .randomSelector #tags {
        width: auto;
    }

    .randomSelector .tag {
        background-color: blueviolet;
        border: 1px solid yellowgreen;
        border-radius: 9px;
        margin: 5px;
        padding: 0px 5px;
        color: whitesmoke;
        display: inline-block;
        width: auto;
    }

    .randomSelector .tag.highlight {
        background-color: rgb(14, 232, 80);
    }
</style>
<script src="./js_data/randomSelector.js" defer></script>
<div class="col-12 table-con">
    <div class="row">
        <!-- <div class=" col-md-6 col-sm-10" style="background-color: indigo;">
            <div class="container">
                <form action="" method="get" id="formIs">
                    <label for="number"> Table Printer</label>
                    <input type="text" name="number" id="number" autocomplete="off">
                    <button type="submit" id="submit">Print</button>
                </form>
            </div>
            <div class="p-container">
                <span id="printer">

                </span>
            </div>
        </div> -->
        <div class="col-12 randomSelector">

            <h3>Enter all of the choices divided by a comma (',') <br> Press enter when you're done</h3>
            <textarea name="" id="textarea" cols="30" rows="10" placeholder="Enter Choiced here"></textarea>
            <div id="tags">

            </div>



        </div>
    </div>

</div>







<script type="text/javascript">
    console.log("hello");
    const input = document.getElementById("number");
    const form = document.getElementById("formIs");
    const btn = document.getElementById("submit")
    const span = document.getElementById("printer")
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        const inputValue = (input.value);
        if (inputValue.match(/^\d+\.\d{0,2}$/) || inputValue.match(/[0-9]+$/)) {
            span.innerHTML = ` <h3 style="text-shadow: 3px 3px 4px red;">Table of ${inputValue}</h5> `;
            for (let i = 1; i <= 10; i++) {
                const li = document.createElement('li');

                // for standard form of decimal
                const valueIs = String(inputValue * i);

                // console.log(valueIs.indexOf('.'));
                let result1 = valueIs.indexOf('.');

                if (result1 > 0) {
                    let res3 = valueIs.substring(0, `${result1+3}`);
                    li.innerText = `${inputValue} * ${i} = ${res3} `;
                } else {
                    li.innerText = `${inputValue} * ${i} = ${inputValue * i} `;
                }

                //for styling list item
                li.style = 'border:3px solid red; text-align: center; list-style: none; background-color:indigo;border:none;border-radius:5%;outline:none;margin:9px -1px;padding:0;color:white;';
                span.appendChild(li);
            }
        } else {
            alert("Please only enter numeric characters only! (Allowed input:0-9)")
        }

    })
</script>

<?php include('./footer.php') ?>