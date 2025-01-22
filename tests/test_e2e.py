from playwright.sync_api import sync_playwright

def test_end_to_end():
    with sync_playwright() as p:
        browser = p.chromium.launch()
        page = browser.new_page()

        # Test du frontend
        page.goto("http://localhost:8080/products.html")
        assert "Liste des Produits" in page.content()

        # Ajouter un produit
        page.goto("http://localhost:8080/add_product.html")
        page.fill("#nom", "Produit E2E")
        page.fill("#prix", "123.45")
        page.click("button[type=submit]")

        # Vérifier le produit ajouté
        page.goto("http://localhost:8080/products.html")
        assert "Produit E2E - 123.45 €" in page.content()

        browser.close()

test_end_to_end()
