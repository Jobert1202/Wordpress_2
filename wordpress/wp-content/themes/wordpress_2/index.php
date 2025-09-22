<?php
get_header();
?>

<main>
    <section class="content">
        <article class="card" aria-labelledby="main-title">
            <h1 id="main-title">Ahoj — tohle je hlavní obsah</h1>
            <p>
            Tento jednoduchý layout obsahuje: <strong>header</strong> s logem a navigací,
            <strong>main</strong> rozdělené na obsah a boční panel, a <strong>footer</strong>
            s doplňujícími informacemi.
            </p>

            <h3>Ukázka prvků</h3>
            <p class="muted">Některé užitečné třídy: <code>.card</code>, <code>.btn</code>, <code>.meta</code>.</p>
        </article>
        <section style="margin-top:16px">
            <div class="card">
            <h4>Další sekce</h4>
            <p class="muted">
                Sem můžeš přidat blogposty, formulář nebo galerii. Styl je záměrně jednoduchý — uprav ho podle potřeby.
            </p>
            </div>
        </section>
    </section>

    <aside>
        <div class="card">
            <h4>Boční panel</h4>
            <p class="meta">Krátké info, odkazy nebo call-to-action.</p>
            <ul style="padding-left:18px">
            <li><a href="#">Nápověda</a></li>
            <li><a href="#">Ceník</a></li>
            <li><a href="#contact">Kontakt</a></li>
            </ul>
        </div>

        <div style="height:12px"></div>

        <div class="card">
            <h5>Kontakt</h5>
            <p class="meta">email@example.com</p>
        </div>
    </aside>
</main>

<?php
get_footer();
?>