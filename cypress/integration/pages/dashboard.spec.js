describe('dashboard page', () => {
    beforeEach(() => {
        cy.refreshDatabase();
        let auth = cy.create('App\\Models\\User');
        console.log(auth.email);
        cy.login({
            email: auth.email
        })
    })

    it('should display dashboard title', function () {
        cy.visit('/dashboard')
        cy.contains('Dashboard')
    });

    it('should display schedule types ordered by hour', function () {
        cy.create('App\\Models\\ScheduleMeal', {
            name: 'Lunch',
            hour: '13:30'
        })
        cy.create('App\\Models\\ScheduleMeal', {
            name: 'Breakfast',
            hour: '07:30'
        })
        cy.create('App\\Models\\ScheduleMeal', {
            name: 'Dinner',
            hour: '19:30'
        })

        cy.visit('/dashboard')

        cy.get('tbody tr:first').should('contain', 'Breakfast')
        cy.get('tbody tr:last').should('contain', 'Dinner')

    })
})
