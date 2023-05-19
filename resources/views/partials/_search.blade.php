<style>
    #contain{
        margin:auto;
        margin-top: 1rem;
        width: 50rem;
        justify-content: left;
        display: grid;
        grid-template-columns: 7rem 29.5rem 10.5rem 3rem;
    }
    #searchbar{
        width: 10rem;
    }
    #clearbutton{
        width:3rem;
    }
    .create{
        display:initial;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 0.25rem;
        padding-right: 0.25rem;
        font-size: small;
        background-color: rgb(191, 191, 191);
        text-align: center;
        border-radius: 1rem;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        text-decoration: none;
        color:black;
    }
    .create:hover{
        background-color: rgb(95, 95, 95);
        color: rgb(233, 233, 233);
    }
</style>
<div id="contain">
    <a href="/orders/create" class="create">New Order</a>
    <div></div>
<form action="/orders">
    <input id="searchbar" type="text" name="name" placeholder="Search by Name" />
</form>
<form action="/orders">
    <input id="clearbutton" type="submit" name="" value="Clear" />
</form>
</div>