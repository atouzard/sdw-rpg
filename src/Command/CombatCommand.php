<?php

namespace App\Command;

use App\Entity\Character;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:combat',
    description: 'Add a short description for your command',
)]
class CombatCommand extends Command
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $character = $this->getPlayerCharacter();
        $enemy = $this->generateEnemy();

        $output->writeln("⚔️ Combat starts: {$character->getName()} vs {$enemy['name']}");
        $output->writeln("");

        $winner = $this->fight($character, $enemy, $output);

        $output->writeln("🏆 Winner: $winner");
        return Command::SUCCESS;
    }

    private function getPlayerCharacter(): Character
    {
        return new Character('Hero', 0,0);
    }

    private function generateEnemy(): array
    {
        // AI enemy with random but balanced stats
        return [
            'name' => 'Goblin',
            'strength' => rand(2, 4),
            'constitution' => rand(2, 4),
            'hp' => 10 + (rand(2, 4) * 2),
            'attack' => 2 + rand(2, 4),
            'defense' => 1 + (rand(2, 4) * 0.5),
        ];
    }

    private function fight(Character $character, array $enemy, OutputInterface $output): string
    {
        // Combat loop

        // Player attacks
        // Enemy attacks

        // Check HP and return winner

        return 'winner?';
    }
}
