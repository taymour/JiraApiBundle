<?php

namespace JiraApiBundle\Service;

use Guzzle\Http\Client;
use Guzzle\Http\Exception\BadResponseException;

/**
 * Service class that handles versions.
 */
class VersionService extends AbstractService
{
    /**
     * Method to retrieve all versions of a project.
     *
     * @param string $projectKey project's key under Jira
     * @param array  $expand     lsit of fields that must be expanded
     *
     * @return boolean|array
     */
    public function getAll($projectKey, $expand = array())
    {
        $parameters = implode(",", $expand);

        return $this->performQuery(
            $this->createUrl(sprintf('%s/versions', $projectKey), $parameters)
        );
    }
}
