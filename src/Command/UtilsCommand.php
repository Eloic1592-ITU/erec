<?php

namespace App\Command;

use App\Service\EmailService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

// Command name
#[AsCommand(name: 'app:utils-cmd')]
class UtilsCommand extends Command {
    private $emailService;
    public function __construct(EmailService $emailService) {
        $this->emailService = $emailService;
        parent::__construct();
    }
    /**+
     * @return void
     */
    protected function configure(): void {
        $this
            // the command help shown when running the command with the "--help" option
            ->setHelp('Helper commmand to check anything!')
            ->addArgument('test-email', InputArgument::REQUIRED, 'Check email functionality')
        ;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int {
        $argument = $input->getArgument('test-email');
        switch ($argument) {
            case 'test-email':
                $output->writeln('toto');
                $this->emailService->sendTestEmail('ando.raharialinera@gmail.com', 'testa content', $output);
                break;
        }

        return Command::SUCCESS;
    }

}