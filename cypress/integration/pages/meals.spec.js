describe('meals page', () => {
    beforeEach(() => {
        cy.refreshDatabase();
        let auth = cy.create('App\\Models\\User');
        cy.login({
            email: auth.email
        })
    })

    it('should display meals title', function () {
        cy.visit('/meals')
        cy.contains('Meals')
    });

    it('should display create meal title when pressing create button', function () {
        cy.visit('/meals')
        cy.contains('Meals')

        cy.get('[cy="cy-resource-create-button"]').click()
        cy.contains('Create Meal')
    });

    it('should create a meal', function () {
        cy.visit('/meals/create')

        let inputIdentifier = 'cy-resource-input';

        cy.get('[cy="' + inputIdentifier + '-name"]').type('1 taza lentejas')
    })
})
