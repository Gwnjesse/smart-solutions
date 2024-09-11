<x-layouts.app title="contact">
    <h1>Contact</h1>
    <p>Heb je vragen of wil je met ons in contact komen? Vul het onderstaande formulier in of stuur ons een e-mail op info@smart-solutions.nl. We proberen zo snel mogelijk te reageren!</p>
    <div class="form">
        <div class="form-group">
            <label for="name">Naam:</label>
            <input type="text" name="naam" id="naam">
        </div>
        <div class="form-group">
            <label for="email">Enter your email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="onderwerp">onderwerp</label>
            <select name="onderwerp" id="onderwerp">
                <option value="onderwerp1">onderwerp</option>
                <option value="onderwerp2">onderwerp</option>
                <option value="onderwerp3">onderwerp</option>
                <option value="onderwerp4">onderwerp</option>
            </select>
        </div>
        <div class="form-group">
            <label for = "overige_info"> overige info:</label>
            <textarea name="overige_info" id="" cols="50" rows="5"></textarea>
        </div>
        <div class="submit">
            <input type="submit" value="stuur door">
        </div>
    </div>
</x-layouts.app>
