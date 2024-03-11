import '../styles/LogInStructure.css';

function LogInStructure() {
    return (
        <>
            <header className="cabeza">
                <section className="logIn__body logInHide">
                    <section className="logIn logInHide" id="logIn">
                        <section className="logIn__article logInHide">
                            <section className="marca logInHide">
                                <section className="marca__left logInHide">
                                    <img className="logo logInHide" src="images/logo.png" />
                                    <h1 className="marca__titulo logInHide">Log In</h1>
                                </section>
                                <button className="btn-close-logIn logInHide" id="btn-close-logIn"><img className="close logInHide"
                                    src="images/close.png" alt="" /></button>
                            </section>
                            <hr />
                            <form className="form-LogIn logInHide" id="form-LogIn">
                                <article className="form-LogIn__article logInHide">
                                    <section className="form-LogIn__article-section logInHide">
                                        <input className="form-LogIn__article-section-input logInHide" placeholder="Usuario"
                                            type="text" name="user" id="user" required />
                                        <input className="form-LogIn__article-section-input logInHide" placeholder="Contraseña"
                                            type="password" name="pass" id="pass" required />
                                    </section>
                                </article>
                                <p className="form-LogIn__msg logInHide"><button id='to-registro'>aquí</button></p>
                                <button className="form-LogIn__input logInHide" id="btn-form-logIn" type="submit">Ingresar</button>
                            </form>
                        </section>
                    </section>
                </section>
            </header>
        </>
    );
}

export default LogInStructure;