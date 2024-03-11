import '../styles/LogInStructure.css';

function Registro() {
    return (
        <>
            <header className="cabeza">
                <section className="registro__body registroHide">
                    <section className="registro registroHide" id="registro">
                        <section className="registro__article registroHide">
                            <section className="marca registroHide">
                                <section className="marca__left registroHide">
                                    <img className="logo registroHide" src="images/logo.png" />
                                    <h1 className="marca__titulo registroHide">Registro</h1>
                                </section>
                                <button className="btn-close-registro registroHide" id="btn-close-registro"><img className="close registroHide"
                                    src="images/close.png" alt="" /></button>
                            </section>
                            <hr />
                            <form className="form-registro registroHide" id="form-registro">
                                <article className="form-registro__article registroHide">
                                    <section className="form-registro__article-section registroHide">
                                        <input className="form-registro__article-section-input registroHide" placeholder="Usuario"
                                            type="text" name="user" id="user" required />
                                        <input className="form-registro__article-section-input registroHide" placeholder="Contraseña"
                                            type="password" name="pass" id="pass" required />
                                    </section>
                                </article>
                                <p className="form-registro__msg registroHide"><button id='to-login'>aquí</button></p>
                                <button className="form-registro__input registroHide" id="btn-form-registro" type="submit">Ingresar</button>
                            </form>
                        </section>
                    </section>
                </section>
            </header>
        </>
    );
}

export default Registro;