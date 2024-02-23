<div class="container login">
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <div class="card">
                <div class="card-header">
                    <h2>Contact</h2>
                </div>
                <div class="card-body">
                    <form action="contactValide" method="POST">
                        <div class="form-group">
                            <label for="Pseudo">Pseudo</label>
                            <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Email </label>
                            <input type="email" name="email" id="email" placeholder="email@gmail.com" required />
                        </div>
                        <div class="form-group">
                            <label for="message">Message </label>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message..."
                                required> </textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</form>