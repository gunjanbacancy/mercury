# Sunspot Tours Test

Welcome to the take home technical test, please read through this file before starting.

-   Create an API endpoint to fetch a single hotel by ID with reviews (if any).

    -   **DO** return the response as JSON.
    -   The response **SHOULD** only include:

        -   The name of the hotel.
        -   The hotel star rating.
        -   The reviews of the hotel (if any).

    -   The endpoint should **NOT** return inactive hotels.

-   You will need to create the migrations and factories to seed dummy data.
-   **DO** write tests.

## Hotels data will include

-   Hotel name
-   Hotel star rating (between 1 - 5)
-   Hotel address
-   Supplier - One of (Own, HotelBeds or SunHotels)
-   Active - Is the hotel active or not?
-   The date the record was created at and updated at

## Review data will include

A hotel can have zero or more reviews.

-   Review title
-   Description of the review
-   Author
-   Date review was made
