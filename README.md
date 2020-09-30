## Architecture

### API

### Models
| Resource   | POST                | GET                               | PUT                                         | DELETE          |
|------------|---------------------|-----------------------------------|---------------------------------------------|-----------------|
| /lineups   | Create a new lineup | Retrieve all lineups              | -                                           | -               |
| /lineups/1 | -                   | Retrieve the details for lineup 1 | Update the details of lineup 1 if it exists | Remove lineup 1 |g

#### Lineup:
- `id: number`
- `name: string`
- `date: string`
- `main_color: string`
- `secondary_color: string`
- `number_color: string`
- `players: string`
- `user_id: string`
