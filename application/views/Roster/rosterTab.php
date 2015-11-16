<div class="row">
    <div class="text">
        <div id="toggles">
            <div id="orderToggles">
                <label>
                    <input type="radio" 
                           name="order" 
                           value="playerLastName" 
                           onchange="toggle(this)" {nameDefault}>
                        Name
                    </input>
                </label>
                <label>
                    <input type="radio" 
                           name="order" 
                           value="playerPosition" 
                           onchange="toggle(this)" {posDefault}>
                        Position
                    </input>
                </label>
                <label>
                    <input type="radio" 
                           name="order" 
                           value="playerNumber" 
                           onchange="toggle(this)" {numDefault}>
                        Jersey #
                    </input>
                </label>
            </div>

            <div id="layoutToggles">
                <label>
                    <input type="radio" 
                           name="layout" 
                           value="table" 
                           onchange="toggle(this)" {tabDefault}>
                        Table
                    </input>
                </label>
                <label>
                    <input type="radio" 
                           name="layout" 
                           value="gallery" 
                           onchange="toggle(this)" {galDefault}>
                        Gallery
                    </input>
                </label>
            </div>
    
            <div id="editToggle">
                <label>
                    <input type="checkbox" 
                           name="edit" 
                           value="edit" 
                           onchange="toggleEdit(this)" {editDefault}>
                        Edit Players
                    </input>
                </label>
            </div>
        </div>
        <h1>The Bengals</h1><h2 {editable}><a href="Player/add">Add Player</a></h2>
        <table id="roster" class="text">
            <tr>
                <th>
                    <h3>Player</h3>
                </th>
                <th>
                    <h3>Position</h3>
                </th>
                <th>
                    <h3>Jersey #<h3>
                </th>
                <th {editable}>
                    <h3{editable}>Edit Player<h3>
                </th>
            </tr>
        {players}
            <tr>
                <th>
                    <a href="playerDetails/{id}">{playerLastName}, {playerFirstName}</a>
                </th>
                <th>
                    {playerPosition}
                </th>
                <th>
                    {playerNumber}
                </th>
                <th>
                    <h5 {editable}><a href="/player/edit/{id}">Edit</a></h5>
                </th>
            </tr>
        {/players}
        </ul>
        </table>
    </div>
    
    <div class="pagination-centered">
        {pagination}
    </div>
</div>
