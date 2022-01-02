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

        cy.get('[id="name"]').type('1 taza de lentejas')
        cy.get('[cy="cy-resource-save-button"]').click()

        cy.get('[cy="cy-resource-create-button"]').click()

        cy.get('[id="name"]').type('1 taza de avena')
        cy.get('[cy="cy-resource-save-button"]').click()
        cy.contains('1 taza de avena')
        cy.contains('1 taza de lentejas')
        cy.contains('Meal Created')
    })

    it('should display require name error when input name is empty', function () {
        cy.visit('/meals/create')
        cy.get('[cy="cy-resource-save-button"]').click()
        cy.contains('The name field is required.')
    });

    it('should display length error when input name is more than 255 characters', function () {
        cy.visit('/meals/create')
        cy.get('[id="name"]').type('a'.repeat(256))
        cy.get('[cy="cy-resource-save-button"]').click()
        cy.contains('The name must not be greater than 255 characters.')
    });

    it('should edit a meal', function () {
        cy.create('App\\Models\\Meal', {
            id: 1,
            name: '1 taza de avena'
        })
        cy.visit('/meals')

        cy.get('[cy="cy-resource-edit-1"]').click()
        cy.get('[id="name"]').clear().type('1 taza de lentejas')
        cy.get('[cy="cy-resource-save-button"]').click()

        cy.contains('1 taza de lentejas')
        cy.contains('Meal Updated')
    })

    it('should delete a meal', function () {
        cy.create('App\\Models\\Meal', {
            id: 1,
            name: '1 taza de avena'
        })
        cy.visit('/meals')

        cy.get('[cy="cy-resource-delete-1"]').click()
        cy.contains('1 taza de lentejas').should('not.exist')
        cy.contains('Meal Deleted')
    })
})
